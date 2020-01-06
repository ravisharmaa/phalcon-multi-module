{% extends 'layout.volt' %}

{% block body %}
    {% for user in users %}
        {{ user.name }}
    {% endfor %}
    <demo-component></demo-component>
{% endblock %}

