#
Create your views here.
from django.shortcuts import render_to_response
def show_video(request,vid):
	return render_to_response('video.html',{'vid' : vid})
