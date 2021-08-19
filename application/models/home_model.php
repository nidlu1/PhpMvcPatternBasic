<?php
class Home_Model {

    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('데이터베이스 연결에 오류가 발생했습니다.');
        }
    }

    public function test($mungu) {
//        $sql = "select * 
//        from BANNER_TB
//        where category = 'TOP' AND enable = 'Y' AND device = ? AND now() BETWEEN start_date AND end_date
//        order by priority desc
//        ";
//        $query = $this->db->prepare($sql);
//        $query->execute(array($device));
//        return $query->fetchAll();
        return $mungu;
    }
}
?>