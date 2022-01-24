<?php
/*
* Name: example Class
*/
require_once('exampleCommonClass.php');

class exampleClass extends exampleCommonClass
{
    const WARN_LOG = 1;
    const ERROR_LOG = 9;

    public function __construct($constants = null)
    {
        $this->add_constants = $constants;
    }

    function execute($argv = array())
    {
        // 引数取得
        $i = 0;
        $arg_str = '';
        foreach ($argv as $arg) {
            $arg_str = $arg_str . '[' . $i . ']=' . $arg . ',';
            $i++;
        }
        $this->outlog('' . $arg_str);

        // ログ出力
        $this->outlog('インフォログ');
        $this->outlog('警告ログ', self::WARN_LOG);
        $this->outlog('エラーログ', self::ERROR_LOG);

        // for文
        for ($j = 0; $j < 5; $j++) {
            $this->outlog('カウント:' . $j);
        }

        // 連想配列
        $array['果物'] = array('りんご', 'ぶどう', 'みかん');
        $array['動物'] = array('いぬ', 'ねこ');
        $array['動物'][] = 'さる';
        $array['菓子'] = array('飴', 'チョコあ〜んぱん');
        $array['機械'] = null;

        foreach ($array as $index => $value) {
            // 三項演算子
            $type = $index === '動物' ? 'その他' : '食べ物';

            // Null合体演算子
            $msg = $value ?? array();

            // 配列の数取得
            $count = count($msg);

            // エルビス演算子
            $msg = implode(',', $msg) ?: 'なし';

            // Sprintf
            $log_string = sprintf('type[%s] index[%s] value[%s] count[%d]', $type, $index, $msg, $count);
            // ログ出力
            $this->outlog($log_string);
        }

        // 配列操作
        $this->outlog('果物の個数は、' . count($array['果物']) . '個です。');

        // 例外
        try{
            $date = new DateTime("100/01/01");
        }catch(Exception $e){
            $this->outlog($e->getMessage(),self::ERROR_LOG);
            $this->outlog('例外が発生しました。',self::ERROR_LOG);
        }
    }
}
