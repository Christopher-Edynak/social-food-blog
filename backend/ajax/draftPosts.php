<?php
	include '../init.php';

	if($_SERVER['REQUEST_METHOD'] === "POST"){
		if(isset($_POST['postIDs'])){
			$postIDs   = json_decode($_POST['postIDs']);
			$blogIDs   = json_decode($_POST['blogIDs']);

			if(!empty($postIDs) && !empty($blogIDs)){
				foreach($postIDs as $postID){
					foreach($blogIDs as $blogID){
						$post = $userObj->get('posts', ['postID' => $postID, 'blogID' => $blogID]);
						$blog = $dashObj->blogAuth($post->blogID);

						if($blog){
							if($blog->role === "Admin" OR $blog->userID === $post->authorID){
								//update post
						 		$userObj->update('posts', ['postStatus' => 'draft'], ['postID' => $post->postID, 'blogID' => $blog->blogID]);

							}else{
								echo 'You don\'t have the rights to preform this action!';
								break;
							}
						}else{
							echo 'Something went wrong!';
							break;
						}
					}
				}
			}
		}
    }
?>