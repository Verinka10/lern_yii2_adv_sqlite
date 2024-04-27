<?php
namespace common\components;

use yii;

class ConnectionSqlite extends  \yii\db\Connection
{

    public function initConnection()
    {
        parent::initConnection();
        /*Yii::$app->db->createCommand('
            CREATE TABLE `counter` (
        	`id` integer PRIMARY KEY AUTOINCREMENT NOT NULL
            )
        ')->execute();*/
        
        // like
        // function like($sub, $s){ return stristr($s, trim($sub, '%')) != null; }
        $this->pdo->sqliteCreateFunction('like', function ($r, $s)
        {
            return preg_match("/" . trim($r, '%') . "/iu", $s) === 1;
        }, 2);

        // regexp
        $this->pdo->sqliteCreateFunction('regexp', function ($r, $s)
        {
            return preg_match("/$r/iu", $s) === 1;
        }, 2);

        // NOW()
        $this->pdo->sqliteCreateFunction('NOW', function() { return date('Y-m-d H:i:s'); });
    }

    static public function stripRegexp($s)
    {
        return strtr($s, array(
            '%' => '\%',
            '_' => '\_',
            '\\' => '\\\\',
            '"' => '',
            '\'' => '',
            '[' => '\[',
            ']' => '\]',
            '+' => '\+',
            '*' => '\*',
            '^' => '\^',
            '$' => '\$'
        ));
    }
}