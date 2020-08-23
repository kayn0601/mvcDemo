<?php
class engine{
    //获取原始数据
    //编译
    //显示到页面中
    //分配变量
    private $templateDir="template";
    private $compileDir="compile";
    private $arr=array();
    private function getDate($file){
        $destfile=$this->templateDir.$file;
        if(is_file($destfile)){
            return file_get_contents($destfile);
        }else{
            die("This template not found!");
        }
    }

    public function setTemplaterDir($path){
        $this->templateDir=$path;
    }
    public function setCompileDir($path){
        $this->compileDir=$path;
    }

    private function compile($file){
        $con=$this->getDate($file);
        $reg='/\{(\$[a-zA-Z][^\}]*)\}/';
        $one=preg_replace_callback($reg,function ($val){
            return '<?php echo '.$val[1].'?>';
        },$con);

        $reg1='/{foreach([^\}]*)\}/';
        $two=preg_replace_callback($reg1,function ($val){
            return '<?php foreach('.$val[1].'){ ?>';
        },$one);

        $reg2='/\{\/foreach\}/';
        $three=preg_replace_callback($reg2,function ($val){
            return '<?php } ?>';
        },$two);

        return $three;
    }
    function display($file){
        $result=$this->compile($file);
        $outFileName=$this->compileDir.basename($file,".html").".php";
        file_put_contents($outFileName,$result);

        foreach ($this->arr as $k=>$v){
            $$k=$v;
        }
        include_once $outFileName;
    }
    function assign($attr,$val){
        $this->arr[$attr]=$val;
    }
}
