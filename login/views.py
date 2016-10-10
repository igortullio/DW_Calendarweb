from django.http import HttpResponse
from django.template import loader
from .models import usuario

def index(request):
	all_usuario = usuario.objects.all()
	template = loader.get_template('login/index.html')
	context = {
		'all_usuario': all_usuario,		
	}
	return HttpResponse(template.render(context, request))
	
def detail(request, usuario_id):
	return HttpResponse("<h2>Detalhes do usuario " + str(usuario_id) + "</h2>")
