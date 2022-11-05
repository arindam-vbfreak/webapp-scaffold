<div class="container mt-3">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/index">home</a></li>
            <li class="breadcrumb-item active" aria-current="page">manage users</li>
        </ol>
    </nav>
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
        <span class="fa fa-user-plus"></span> Create User
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0" id="exampleModalLabel">Create User</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Name:
                <input name="name" type="text" class="form-control form-control-sm mb-3">
                Login Id:
                <input name="email" type="text" class="form-control form-control-sm mb-4">
                <select name="role" type="text" class="form-control form-control-sm mb-3">
                    <option value="administrator">Select Role</option>
                    <option value="administrator">Administrator</option>
                    <option value="approver">Approver</option>
                    <option value="contributor">Contributor</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="_create_user" class="btn btn-sm btn-primary">Save</button>
            </div>
            </div>
        </div>
    </div>    
    <table class="table border table-hover shadow-sm mt-4">
        <tr class="bg-light">
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td colspan="2">Role</td>
        </tr>
        <?php
            ifRowEmpty($data["users"],"<tr><td colspan='4'>No data found.</td></tr>");
            $count=1;
            foreach ($data["users"] as $user) {
                $count++;
                ?>
                <tr>
                    <td><?=$count?></td>
                    <td><?=$user["name"];?></td>
                    <td><?=$user["email"];?></td>
                    <td><?=$user["role"];?></td>
                    <td class="text-right">
                        <span class="fa fa-edit"></span>
                        <span class="fa fa-refresh"></span>
                        <button class="btn btn-sm btn-danger" type="submit" value="<?=$user["email"];?>" 
                            name="_delete_user"><span class="fa fa-trash"></span></button>
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>
</div>