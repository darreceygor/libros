{include "header.tpl"}
{include "nav.tpl"}

<form method="POST" action="verify" >
    <div class="container">
        <h3>Iniciar sesión</h3>

        <div class="row  g-3 m-2">

            <div class="col-md-auto col-8">
                    <label class="form-label d-md-none" for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="col-md-auto col-8">
                    <label class="form-label d-md-none" for="inputPassword">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
                {if $error}
                    <div class="alert alert-danger"> {$error}  </div>
                {/if}

            <div class="col-md-auto col-8">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <a href="user" class="btn btn-secondary">Register</a>
            </div>
        </div>
        <div class="col-md-auto col-8">
        </div>
    </div>
</form>




{include "footer.tpl"}