# com qualquer mudanca feita nas classes que afetam as tabelas, deve ser feito o makemigrations e migrate e sincronizar com a base de dados
from django.db import models

class calendario(models.Model):
	ano = models.CharField(max_length=250)
	tipo = models.CharField(max_length=50)
	#função para visualização no python manage.py shell
	def __str__(self):
		return self.ano + ' - ' + self.tipo

class usuario(models.Model):
	nome = models.CharField(max_length=250)
	email = models.CharField(max_length=250)
	senha = models.CharField(max_length=500)
	#função para visualização no python manage.py shell
	def __str__(self):
		return self.nome + ' - ' + self.senha

class evento(models.Model):
	usuario = models.ForeignKey(usuario, on_delete=models.CASCADE)
	titulo = models.CharField(max_length=250)
	descricao = models.CharField(max_length=500)
	hora = models.CharField(max_length=5)
	ano = models.ForeignKey(calendario, on_delete=models.CASCADE)
	mes = models.CharField(max_length=100)
	dia = models.CharField(max_length=2)
