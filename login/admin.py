from django.contrib import admin
from .models import calendario
from .models import usuario
from .models import evento

admin.site.register(calendario)
admin.site.register(usuario)
admin.site.register(evento)