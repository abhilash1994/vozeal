from django.db import models
from django.contrib.auth.models import User
# Create your models here.
class VozealUser(models.Model):
	user = models.OneToOneField(User)
    	auth_key = models.CharField(max_length=100)	
