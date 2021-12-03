<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <P>
        <title>Jessica ADM Asesorias SPA- Corredora de Propiedades</title>
    </p>

    <!-- Bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-social@2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <form action="../../Controlador/Validation.php" method="post">
        <section class="section">
            <div class="columns">
                <div class="column is-6 is-offset-3 box">
                    <h1 class="title">
                        Login
                    </h1>
                    <div class="field">
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" type="text" placeholder="Usuario" name="username">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control has-icons-left">
                            <input class="input" type="password" placeholder="Password" name="password">
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">
                            <button type="submit" class="button is-success">Ingresar</button>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </form>

</body>

</html>