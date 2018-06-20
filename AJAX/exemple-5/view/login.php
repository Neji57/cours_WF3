<div class="rounded border border-light text-light my-4 text-center">
    <h1>Messagerie</h1>
</div>

<div class="row">

    <div class="col-6">
        <form method="POST" action="" id="login-form">
            <div class="card">
                <div class="card-header">
                    <span class="lead">Se connecter</span>
                </div>
                <div class="card-body">
                    <div class="form-error badge badge-danger">
                        <?= $loginError ?>
                    </div>
                    <div class="form-group">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" name="username" id="login-username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="text" name="password" id="login-password" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info" name="login">Se connecter</button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-6">
        <form method="POST" action="" enctype="multipart/form-data" id="register-form">
            <div class="card">
                <div class="card-header">
                    <span class="lead">Créer un compte</span>
                </div>
                <div class="card-body">
                    <div class="form-error badge badge-danger">
                        <?= $registrationError ?>
                    </div>
                    <div class="form-group">
                        <label for="username">Nom d'utilisateur</label>
                        <input type="text" name="username" id="register-username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input type="text" name="email" id="register-email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="text" name="password" id="register-password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" name="avatar" id="register-avatar" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info" name="register">S'enregistrer</button>
                </div>
            </div>
        </form>
    </div>

</div>