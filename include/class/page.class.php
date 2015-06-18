<?php
//分页类
class page {
	public $page;//当前是第几页
	public $pagenum;//翻页栏显示数
	public $pagenums;//总页数
	public $listnum;//每页文章数
	public $listnums;//文章总数
	
	public $limit;//生成sql中limit数据
	public $html;//生成page翻页html模板
	//构造函数初始化类设置
	function __construct($allnum, $page = null, $listnum = null, $pagenum = null) 
	{
		$this->listnums = $allnum;
		$this->page = $page === null ? 1 : $page;
		$this->listnum = $listnum === null ? 20 : $listnum;
		$this->pagenum = $pagenum === null ? 10 : $pagenum;

		$this->pagenums = ceil($this->listnums / $this->listnum);
		
		$this->limit = $this->get_limit();
		$this->html = $this->getpagelisthtml();
	}
	//获取sql中limit函数的开始指针位置
	function get_limit()
	{
		empty($this->page) && $this->page = 1;
		$limit = ($this->page - 1) * $this->listnum;
		return " limit {$limit}, {$this->listnum}";
	}
	//获取翻页栏列表
	function get_pagelist()
	{
		//获取当前翻页栏左右指针理论位置
		if (floor($this->pagenum / 2) == ceil($this->pagenum / 2)) {
			$left = $this->page - ($this->pagenum / 2);
			$right = $this->page + ($this->pagenum / 2);
		}
		else {
			$left = $this->page - floor($this->pagenum / 2);
		 	$right = $this->page + floor($this->pagenum / 2);
		}
		//获取当前翻页栏起始指针位置
		if ($this->pagenums <= $this->pagenum) {
			$pagenumstart = 1;
			$pagenumend = $this->pagenums;
		}
		elseif ($left <= 1) {
			$pagenumstart = 1;
			$pagenumend = $this->pagenum;
		}
		elseif ($right >= $this->pagenums) {
			$pagenumstart = $this->pagenums - $this->pagenum + 1;
			$pagenumend = $this->pagenums;
		}
		else {
			$pagenumstart = $left;
			$pagenumend = $right;
		}
		for ($i = $pagenumstart; $i <= $pagenumend; $i++) {
			$pagelist[] = $i;
		}
		return $pagelist;
	}
	//获取翻页块带html的列表
	function getpagelisthtml()
	{
		global $phpshe;
		
		if (count($this->get_pagelist()) > 1) {
			$url = updateurl('page',1);				
			$pagelisthtml = "<a href='{$url}'>首页</a>";
			foreach ($this->get_pagelist() as $k => $v) {
				$url = updateurl('page', $v);
				$pagelisthtml .= ($this->page == $v) ? "&nbsp;<a href='{$url}' class='sel'>{$v}</a>" : "&nbsp;<a href='{$url}'>{$v}</a>";	
			}
			$url = updateurl('page', $this->pagenums);
			$pagelisthtml .= "&nbsp;<a href='{$url}'>末页</a>";
			return $pagelisthtml;
		}
	}
}
?>