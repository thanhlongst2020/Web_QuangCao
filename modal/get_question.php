<?php 
function get_question(){
    require('../database/Connection.php');
    $sql = 'select * from question';
    $result = $conn->query($sql);
    $count = 0;
    if($result->num_rows>0){
        foreach($result as $row){
            $count  ++;
            $output ='<tr ';
            if($row['stats']==0){
                $output .='style="font-weight: bold;"> ';
            }
            else{
                $output .= '>';
            }
            $output .= '<td>'.$count.'</td>
                        <td>'.$row['cont_name'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['question'].'</td>
                        <td>'.$row['date_recei'].'</td>
                        <td style="border: none;"><button data-id_xoa='.$row['id'].' type="button" class="btn btn-delete" id="delete_question">Delete</button></td>
                        <td style="border: none;"><button data-id_reply='.$row['id'].' data-cont_name="'.$row['cont_name'].'" data-email_reply="'.$row['email'].'" data-question_reply="'.$row['question'].'" type="button" class="btn btn-reply reply_question"  id="reply_question">Reply</button></td>
                    </tr>';
            echo $output;

                
        }
    }
    else{
        echo '
            <tr>
                <td colspan="7"  style="text-align: center;">Chưa có dữ liệu</td>
            </tr>
        ';
    }
    
}