<div class="container col-md-8">
    <h1 class="text-center text-warning">Liệt Kê Tài Khoản</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tên </th>
                <th>Password</th>
                <th>Quản Lí</th>
            </tr>
        </thead>
        <tbody class="text-info">
            <?php 
        $i=0;

        foreach($category_taikhoan as $key=>$cate){
            $i++;
            
        
        ?>
            <tr>
                <td class="text-primary"><?php echo $i ?></td>
                <td class="text-primary"><?php echo $cate['username'] ?></td>
                <td class="text-primary"><?php echo $cate['password'] ?></td>
                <td class="text-success"><a href="<?php echo BASE_URL?>/product/delete_taikhoan/<?php echo $cate['admin_id']?>"><i
                            class="fa-solid fa-trash-can"></i></a>
                    <a href="<?php echo BASE_URL?>/product/edit_taikhoan/<?php echo $cate['admin_id'] ?>"><i
                            class="fa-regular fa-pen-to-square"></i></a>
                </td>
            </tr>
            <?php } ?>

        </tbody>
    </table>
</div>