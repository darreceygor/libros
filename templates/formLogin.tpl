{include "header.tpl"}
{include "nav.tpl"}

<div class="m-4">
    <form method="POST" action="verify" >
        <div class="row align-items-center g-3">
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
            </div>
        </div>
    </form>
    
</div>

{include "footer.tpl"}