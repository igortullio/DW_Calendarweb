from django.http import HttpResponse
from django.shortcuts import render
from .models import usuario

def index(request):
	all_usuario = usuario.objects.all()
	context = {'all_usuario': all_usuario}
	return render(request, 'login/index.html', context)
	
def detail(request, usuario_id):
	return HttpResponse("<h2>Detalhes do usuario " + str(usuario_id) + "</h2>")
