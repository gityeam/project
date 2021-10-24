<?php include "header.php";?>
<!-- vmcreate_from에서 받은 값을 디비로 넘기기 위한 페이지 -->
<?php
    $vmhostname = $_POST['vmhostname'];
    $vmcpu = $_POST['vmcpu'];
    $vmram = $_POST['vmram'];
    $vmnetwork = $_POST['vmnetwork'];
    $volume = $_POST['volume'];

//  $cont = mysqli_connect("localhost","user1","12345","project");
    $sql = "insert into vm_status (vmhostname,vmcpu,vmram,vmnetwork,volume) values( '$vmhostname','$vmcpu','$vmram','$vmnetwork','$volume') ";
    $result = mysqli_query($cont,$sql);
    //디비와 연결이 먼저 되어있는지 확인

    mysqli_close($cont);


    if(!$result) {
            echo ("
            <script>
            alert('연결이 실패했습니다.');
            history.go(-1);
            </script>
            ");
        }
        // vmcreate_form.php에서 받은 값을 바탕으로 가상머신 인스톨
    else {
          $build = shell_exec('sudo virt-install --name "'.$vmhostname.'" --vcpus "'.$vmcpu.'" --ram "'.$vmram.'" --network="'.$vmnetwork.'" --disk "'.$volume.'" --import  --graphics vnc --noautoconsole; sudo echo $?' );
        if ($build == 0)
        {
            echo ("
            <script>
            alert('성공했어요');
            location.href ='index.php';
            </script>
            ");
        }
        else{
            echo ("
            <script>
            alert('{vmram}');
            alert('실패했습니다.');
            history.go(-1);
            </script>
            ");
        }

        }


?>
<?php include"footer.php"; ?>

