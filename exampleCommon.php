<?php
/*
* Name: example Common Class 
*/
class exampleCommonClass
{
    const INFO_LOG = 0;
    const WARN_LOG = 1;
    const ERROR_LOG = 9;

    //関数エリア
    /**
     * ログ出力
     * @param string $message
     * @param int $type(0 or 1 or 9)
     * @return void
     * */
    public function outlog($message, $type = self::INFO_LOG)
    {
        switch ($type) {
            case self::INFO_LOG:
                $type_message = '[Inf] ';
                break;
            case self::WARN_LOG:
                $type_message = '[War] ';
                break;
            case self::ERROR_LOG:
                $type_message = '[Err] ';
                break;
        }
        // 日付
        $date = date('Y-m-d H:i:s');
        print('[' . $date . ']' . $type_message . $message . PHP_EOL);
    }
}
