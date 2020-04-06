<?php
include "../../connection.php";

class BlogHP extends Screw_it {
    
    protected $blog_id;
    protected $title;
    protected $body;
    protected $main_image;

    
    public function getTitle(){
            $sql = "SELECT * FROM blog_posts;";
            $stmt = Screw_it::getInstance()->query($sql);
            while($row = $stmt->fetch()){
                echo $row['title']."<br>";
            }
    }
    
    //method? only need prepared statments if we get user input
    public function getLatestBlogTitle(){
            $sql = "select * from blog_posts order by date_posted desc;";
            $stmt = Screw_it::getInstance()->query($sql);
            while($row = $stmt->fetch()){
                return $row['title']."<br>";
            }
    }
    
        public function getLatestBlogImage(){
            $sql = "select * from blog_posts order by date_posted desc;";
            $stmt = Screw_it::getInstance()->query($sql);
            while($row = $stmt->fetch()){
                $rows[] = $row;
                return $rows[0]['main_image'];
                }
        }
        
        public function getLatestBlogText(){
            $sql = "select * from blog_posts order by date_posted desc;";
            $stmt = Screw_it::getInstance()->query($sql);
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                return $row['body'];
                }
        }
  



}