<?php
    $text = '[{"year":"2012","term":"秋","course_num":"00101","name":"研究会Ａ ","lecturer":["阿川　尚之"],"day":["3","3"],"timepiriod":["2","3"],"department":"学部","subject":"研究会","credit":"0","capacity":"","syllabus_url":"https://vu8.sfc.keio.ac.jp/course2007/summary/syll_view.cgi?yc=2012_31992&amp;ks=00101&amp;key2="},{"year":"2012","term":"秋","course_num":"00101","name":"研究会Ａ ","lecturer":["安村　通晃"],"day":["1","2"],"timepiriod":["5","5"],"department":"学部","subject":"研究会","credit":"0","capacity":"","syllabus_url":"https://vu8.sfc.keio.ac.jp/course2007/summary/syll_view.cgi?yc=2012_26725&amp;ks=00101&amp;key2="},{"year":"2012","term":"秋","course_num":"00101","name":"研究会Ａ ","lecturer":["永野　智久"],"day":["2","2"],"timepiriod":["4","5"],"department":"学部","subject":"研究会","credit":"0","capacity":"","syllabus_url":"https://vu8.sfc.keio.ac.jp/course2007/summary/syll_view.cgi?yc=2012_26601&amp;ks=00101&amp;key2="},{"year":"2012","term":"秋","course_num":"00101","name":"研究会Ａ ","lecturer":["加藤　貴昭"],"day":["2","2"],"timepiriod":["4","5"],"department":"学部","subject":"研究会","credit":"0","capacity":"","syllabus_url":"https://vu8.sfc.keio.ac.jp/course2007/summary/syll_view.cgi?yc=2012_26202&amp;ks=00101&amp;key2="},{"year":"2012","term":"秋","course_num":"00101","name":"研究会Ａ ","lecturer":["加藤　文俊"],"day":["1","1"],"timepiriod":["5","6"],"department":"学部","subject":"研究会","credit":"0","capacity":"","syllabus_url":"https://vu8.sfc.keio.ac.jp/course2007/summary/syll_view.cgi?yc=2012_26605&amp;ks=00101&amp;key2="}"';

    preg_match_all('/lecturer":\["(.*?)"](.*?)(https(.*?)yc=2012_(.*?)&amp;ks=00101&amp;key2=)/', $text, $out);

    for ($i = 0; $i < count($out); $i++) {
        echo $out[1][$i]."\n";
        echo $out[3][$i]."\n";
    }


?>
