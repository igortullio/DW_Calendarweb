from django.conf.urls import url
from . import views

urlpatterns = [
	# /login/
	url(r'^$', views.index, name='index'),
	
	# /login/712(um id)/
	url(r'^(?P<usuario_id>[0-9]+)/$', views.detail, name='detail'),
]
