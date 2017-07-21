<div class="middle-box text-center loginscreen   animated fadeInDown" style="padding-top:130px;">
        <div>
            <h3>Novo Usuário</h3>
            <p>Por favor, preencha as informações abaixo para se cadastrar.</p>
            <form class="m-t" method="POST" role="form" action="/register">
            {!! csrf_field() !!}
                <div class="form-group">
                    <input class="form-control" placeholder="Nome" id="name" required="" type="text">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Email" id="email" required="" type="email">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Senha" id="password" required="" type="password">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Confirmar senha" id="checkPassword" required="" type="password">
                </div>

                <button type="submit" id="btnSubmit" class="btn btn-primary block full-width m-b">Cadastrar</button>

                <p class="text-muted text-center"><small>Já possui conta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="repositorio">Login</a>
            </form>
            <p class="m-t"> <small>© 2015 - 2017</small> </p>
        </div>
    </div>