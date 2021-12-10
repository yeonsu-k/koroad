<?php
$output=null;
$retval =null;

echo exec("/bin/bash /html/sample.Rscript",$outfut,$retval);
echo "Returned with status $retval and output:\n";
print_r("$outfut");

//chmod('/host/home4/koroad/html/',0777);  //chmod(파일이름, 권한)
//echo exec("/bin/bash /host/home4/koroad/html/sample.R",$outfut,$retval);

?>


<!--W

echo "";
echo "Number values to generate:";
echo "Submit";
echo ""
;

if(isset($_GET['N']))
{
  $N = $_GET['N'];

  // execute R script from shell
  // this will save a plot at temp.png to the filesystem
  exec("Rscript my_rscript.R");

  // return image tag
  $nocache = rand();
  echo("");
}
?>

// if(isset($_GET['N']))
// {
//   $N = $_GET['N'];
 
//   exec("sample.R $N",$outfut,$retval);
//   echo "Returned : $retval : /n";
//   print_r($output);
 
//   // return image tag
//   //$nocache = rand();
//   //echo("<img src='temp.png?$nocache' />");
// }
//참고한 링크 : https://www.r-bloggers.com/2010/08/integrating-php-and-r/
// exec 리눅스 에러 코드 목록 : http://b1ix.net/121 
//오류 127 : https://stackoverflow.com/questions/438618/illegal-command-error-code-127-in-php-exec-function
//오류 126 : https://stackoverflow.com/questions/11511762/exec-php-return-val-is-126/26141837
//권한 문제? 다른 문제? https://kldp.org/node/98907
//PHP에서 R스크립트 실행 하기 : http://dev.epiloum.net/1641
//R을 이용한 웹 기반 교육용 통계분석 : http://www.koreascience.or.kr/article/JAKO201211666469010.pdf
// 권한 바꾸는 법 : https://webisfree.com/2015-01-02/%EB%A6%AC%EB%88%85%EC%8A%A4-%EC%9C%A0%EB%8B%89%EC%8A%A4-%ED%8C%8C%EC%9D%BC-%EA%B6%8C%ED%95%9C-%EC%84%A4%EC%A0%95-%EC%95%8C%EC%95%84%EB%B3%B4%EA%B8%B0-777-755
// https://www.lesstif.com/ws/%ED%8F%B4%EB%8D%94%EC%99%80-%ED%8C%8C%EC%9D%BC%EC%97%90-%EC%A0%81%EC%A0%88%ED%95%9C-%EA%B6%8C%ED%95%9C-%EB%B6%80%EC%97%AC-43844145.html
// https://action713.tistory.com/entry/%ED%8D%BC%EB%AF%B8%EC%85%98-%EC%84%A4%EC%A0%95?category=554899
-->