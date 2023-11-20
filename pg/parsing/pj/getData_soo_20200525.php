<?php
    // author_  누가
    // date_    2020.05.25
    // file_    getData_soo.php
    // program_ 수영로 설교내용 HTML 파싱
    // param_   mcode : 설교구분 / regdate : 등록일자 / seq : 설교번호

    include_once 'simple_html_dom.php';

    try {
        $mcode = $_POST['mcode'];
        $regdate = $_POST['regdate'];
        $seq = $_POST['seq'];
        
        // 설교내용 HTML DOM 파싱
        $url = 'https://www.sooyoungro.org/new-layout/syrtv/worshipTextPopForm.jsp?lcode=01&mcode='.$mcode.'&regdate='.$regdate.'&seq='.$seq;
        $str = file_get_html($url);
        // UTF-8 인코딩
        $enc = mb_detect_encoding($str, array('EUC-KR', 'UTF-8', 'shift_jis', 'CN-GB'));
        if ($enc != 'UTF-8') {
            $str = iconv($enc, 'UTF-8', $str);
        }
        // textbox 내의 내용만 넘김 (설교내용)
        $textboxStr = $str->find('.textbox', 0);
        $result = $textboxStr->innertext;
        //return 0;
               
        /* simple_html_dom 안쓰고 바로 cURL 사용할 때
            $curl = curl_init($url);
            curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (compatible; with PHP');
            curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
            curl_setopt($curl,CURLOPT_NOSIGNAL,1);
            curl_setopt($curl,CURLOPT_HEADER,0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $result = curl_exec($curl);
            if (curl_error($curl)) { 
                exit('CURL Error('.curl_errno($curl).') '.curl_error($curl)); 
            }
            print_r($result);
            curl_close($curl);
        */
        /* 인코딩 문제인 줄 알고 삽질        
            //$result= explode("\r\n", $result);
            //$result = iconv("euc-kr", "UTF-8", $result);
            //$result = urldecode($result);
            //$result = mb_convert_encoding($result, "euc-kr","utf-8");
            //$result2 = rawurlencode(iconv("CP949","UTF-8",$result));
            //print_r(htmlspecialchars($result));
        */
    }
    catch(exception $e) {
		$result['msg']		= $e->getMessage();
		$result['code']		= $e->getCode();
    }
    finally {
        echo $result;
    }
?>