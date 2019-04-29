<?php

class Paginator {

  private $_perPage;       // set the number of items per page. @var numeric
  private $_instance;      // set get parameter for fetching the page number @var string
  private $_page = 1;      // sets the page number @var numeric
  private $_limit;         // set the limit for the data source @var string
  private $_totalRows = 0; // set the total number of records/items @var numeric

  public function __construct($perPage, $instance) {
    $this->_instance = $instance;
    $this->_perPage = $perPage;
    $this->set_instance();
  }

  private function get_start() {
    if ($this->_page == 0) $page = 1;
    else $page = $this->_page;
    return ($page * $this->_perPage) - $this->_perPage;
  }

  private function set_instance() {
    $this->_page = (int)(!isset($_REQUEST[$this->_instance]) ? 1 : $_REQUEST[$this->_instance]);
    $this->_page = ($this->_page == 0 ? 1 : $this->_page);
  }

  public function set_total($_totalRows) {
    $this->_totalRows = $_totalRows;
  }

  public function get_limit() {
    $lastpage = ceil($this->_totalRows / $this->_perPage);
    if ($this->_page > $lastpage) $this->_page = $lastpage;
    return ' LIMIT '.$this->get_start().','.$this->_perPage;
  }

  public function page_links($path = '?', $ext = null) {
    $adjacents = 6;
    $prev = $this->_page - 1;
    $next = $this->_page + 1;
    $lastpage = ceil($this->_totalRows / $this->_perPage);
    if ($this->_page > $lastpage) $this->_page = $lastpage;
    $lpm1 = $lastpage - 1;

    $pagination = '';
    if ($lastpage > 1) {
      $pagination .= '<ul class="pagination">';
      if ($this->_page > 1) $pagination .= '<li><a class="busca" href="'.$path.$this->_instance.'='.$prev.$ext.'">«</a></li>';
      else $pagination .= '<li class="disabled"><a href="#">«</a></li>';
      if ($lastpage < 7 + ($adjacents * 2)) {
        for ($i = 1; $i <= $lastpage; $i++) {
          if ($i == $this->_page) $pagination .= '<li class="active"><a href="#">'.$i.'</a></li>';
          else $pagination .= '<li><a class="busca" href="'.$path.$this->_instance.'='.$i.$ext.'">'.$i.'</a></li>';
        }
      } elseif ($lastpage > 5 + ($adjacents * 2)) {
        if ($this->_page < 1 + ($adjacents * 2)) {
          for ($i = 1; $i < 4 + ($adjacents * 2); $i++) {
            if ($i == $this->_page) $pagination .= '<li class="active"><a href="#">'.$i.'</a></li>';
            else $pagination .= '<li><a class="busca" href="'.$path.$this->_instance.'='.$i.$ext.'">'.$i.'</a></li>';
          }
          $pagination .= '<li><a class="busca" href="'.$path.$this->_instance.'='.$lpm1.$ext.'">'.$lpm1.'</a></li>';
          $pagination .= '<li><a class="busca" href="'.$path.$this->_instance.'='.$lastpage.$ext.'">'.$lastpage.'</a></li>';
        } elseif ($lastpage - ($adjacents * 2) > $this->_page && $this->_page > ($adjacents * 2)) {
          $pagination .= '<li><a class="busca" href="'.$path.$this->_instance.'=1'.$ext.'">1</a></li>';
          $pagination .= '<li><a class="busca" href="'.$path.$this->_instance.'=2'.$ext.'">2</a></li>';
          for ($i = $this->_page - $adjacents; $i <= $this->_page + $adjacents; $i++) {
            if ($i == $this->_page) $pagination .= '<li class="active"><a href="#">'.$i.'</a></li>';
            else $pagination .= '<li><a class="busca" href="'.$path.$this->_instance.'='.$i.$ext.'">'.$i.'</a></li>';
          }
          $pagination .= '<li><a class="busca" href="'.$path.$this->_instance.'='.$lpm1.$ext.'">'.$lpm1.'</a></li>';
          $pagination .= '<li><a class="busca" href="'.$path.$this->_instance.'='.$lastpage.$ext.'">'.$lastpage.'</a></li>';
        } else {
          $pagination .= '<li><a class="busca" href="'.$path.$this->_instance.'=1'.$ext.'">1</a></li>';
          $pagination .= '<li><a class="busca" href="'.$path.$this->_instance.'=2'.$ext.'">2</a></li>';
          for ($i = $lastpage - (2 + ($adjacents * 2)); $i <= $lastpage; $i++) {
            if ($i == $this->_page) $pagination .= '<li class="active"><a href="#">'.$i.'</a></li>';
            else $pagination .= '<li><a class="busca" href="'.$path.$this->_instance.'='.$i.$ext.'">'.$i.'</a></li>';
          }
        }
      }
      if ($this->_page < $i - 1) $pagination .= '<li><a class="busca" href="'.$path.$this->_instance.'='.$next.$ext.'">»</a></li>';
      else $pagination .= '<li class="disabled"><a href="#">»</a></li>';
      $pagination .= '</ul>';
    }
    return $pagination;
  }
}
