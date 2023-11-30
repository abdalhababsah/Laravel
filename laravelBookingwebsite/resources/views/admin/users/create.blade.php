<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content remains the same -->
</head>
<body>
    <header>
        <!-- Header content remains the same -->
    </header>

    <div class="admin-wrapper">
        <!-- Left Sidebar -->
        <!-- Left sidebar content remains the same -->

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="{{ route('users.create') }}" class="btn btn-big">Add User</a>
                <a href="{{ route('users.index') }}" class="btn btn-big">Manage Users</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add User</h2>

                <form action="{{ route('users.store') }}" method="post">
                    @csrf
                    @method('post')
                    <div>
                        <label>Username</label>
                        <input type="text" name="name" class="text-input">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" class="text-input">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" class="text-input">
                    </div>
                    <div>
                        <label>Contact</label>
                        <input type="text" name="Contact" class="text-input">
                    </div>

                    <div>
                        <label>Role</label>
                        <select name="RoleID" class="text-input">
                            <option value="1" >User</option>
                            <option value="2" >Leaser</option>
                            <option value="3" >Admin</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-big">Add User</button>
                    </div>
                </form>

            </div>
        </div>
        <!-- // Admin Content -->
    </div>
    <!-- // Page Wrapper -->




        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../js/scripts.js"></script>

    </body>

</html>
