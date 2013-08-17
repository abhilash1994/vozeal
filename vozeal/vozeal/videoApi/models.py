from django.db import models
from json_field import JSONField

# Create your models here.
class Video(models.Model):
	video_id = models.CharField(max_length=6)
	data = JSONField()
