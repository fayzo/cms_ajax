<?php 
class Comment extends Users
{
    public function comments($tweet_id)
    {
        $mysqli= $this->database;
        $query= "SELECT * FROM comment LEFT JOIN users ON comment_by=user_id WHERE comment_on = $tweet_id ";
        $result= $mysqli->query($query);
        $comments= array();
        while ($row= $result->fetch_assoc()) {
             $comments[] = $row;
        }
        return $comments;
    }

    public function delete($table,$array)
    {
        $mysqli= $this->database;
        $query= "DELETE FROM $table";
        $where= " WHERE"; 
        foreach ($array as $name => $value) {
            # code...
             $query .= "{$where} {$name} = {$value}";
             $where= " AND"; 
        }


        $query1= "SELECT tweet_image FROM $table";
        $where1= " WHERE"; 
        foreach ($array as $name => $value) {
            # code...
             $query1 .= "{$where1} {$name} = {$value}";
             $where1= " AND"; 
        }

        $result= $mysqli->query($query1);
        if(!empty($rows['tweet_image'])){
            $rows= $result->fetch_assoc();
            $expode = explode("=",$rows['tweet_image']);
            $uploadDir = $_SERVER['DOCUMENT_ROOT'].'Blog_nyarwanda_CMS/public/uploads/posts/';
            
            for ($i=0; $i < count($expode); ++$i) { 
                  unlink($uploadDir.$expode[$i]);
            }
        }

        $query= $mysqli->query($query);

        if($query){
                exit('<div class="alert alert-success alert-dismissible fade show text-center">
                    <button class="close" data-dismiss="alert" type="button">
                        <span>&times;</span>
                    </button>
                    <strong>SUCCESS DELETE</strong> </div>');
            }else{
                exit('<div class="alert alert-danger alert-dismissible fade show text-center">
                    <button class="close" data-dismiss="alert" type="button">
                        <span>&times;</span>
                    </button>
                    <strong>Fail to delete !!!</strong>
                </div>');
        }
    }
}

$comment= new Comment();
?>