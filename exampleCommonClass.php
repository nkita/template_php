<?php
/*
* Name: example Common Class 
*/
class exampleCommonClass
{
    //関数エリア
    /**
     * ログ出力
     * @param string $message
     * @param int $type(0 or 1 or 9)
     * @return void
     * */
    public function outlog($message, $type = 0)
    {
        switch ($type) {
            case 0:
                $type_message = '[Inf] ';
                break;
            case 1:
                $type_message = '[War] ';
                break;
            case 9:
                $type_message = '[Err] ';
                break;
        }
        // 日付
        $date = date('Y-m-d H:i:s');
        print('[' . $date . ']' . $type_message . $message . PHP_EOL);
    }
}
