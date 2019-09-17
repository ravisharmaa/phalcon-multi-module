<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{% block pageTitle %} Learning Phalcon {% endblock %}</title>
    {{ stylesheetLink('assets/default/css/app.css') }}
</head>
<body>
    <div id="app">
        {% block body %}
            <h1>Main layout</h1>
        {% endblock %}

    </div>
    {{ javascriptInclude("assets/default/js/app.js") }}
    {% block javascripts %} {% endblock %}
</body>
</html>