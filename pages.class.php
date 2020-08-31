<?php
class pages{
    public $fullPath;
    public $pages=10;
    public $total=200;
    public $curentPages;
    private function getUrlInfo(){
       $originPath="http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
        $path="http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];

        $search=substr(strchr($originPath,"?"),1);
        $reg='/&*pages=\d*/';
        $search=preg_replace($reg,"",$search);
        if(isset($_GET["pages"])){
            $this->curentPages=$_GET["pages"];
        }else{
            $this->curentPages=0;
        }

       $this->fullPath=$path."?".$search."&pages=";
        echo $this->fullPath;
//        echo "<pre>";
//        var_dump($_SERVER);
//        var_dump($originPath);
//        echo "<br>";
//        echo $path;
//        echo "<br>";
//        echo $search;
    }

    public function show(){
        $this->getUrlInfo();
        $str="";
        $str.="<a href='{$this->fullPath}0'>[首页]</a>";

        $up=$this->curentPages-1>0?$this->curentPages-1:0;
        $str.="<a href='{$this->fullPath}$up'>[上一页]</a>";

        $start=$this->curentPages-floor($this->pages/2)<0?$this->curentPages:$this->curentPages-floor($this->pages/2);

        $end=$this->curentPages+$this->pages>($this->total/$this->pages)?($this->total/$this->pages):$this->curentPages+$this->pages;

        for($i=$start;$i<$end;$i++){
            if($i==$this->curentPages){
                $style="style=color:red;";
            }else{
                $style="";
            }
            $str.="<a href='{$this->fullPath}{$i}' $style>[{$i}]</a>";
        }

        $next=$this->curentPages+1>($this->total/$this->pages)?$this->curentPages:$this->curentPages+1;
        $str.="<a href='{$this->fullPath}$next'>[下一页]</a>";


        $last=$this->total/$this->pages-1;
        $str.="<a href='{$this->fullPath}$last'>[尾页]</a>";

        echo $str;
    }
}
$pages=new pages();
$pages->show();