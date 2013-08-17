# Create your views here.
from videoApi.models import Video
from django.http import HttpResponse
from django.views.decorators.csrf import csrf_exempt
@csrf_exempt
def set_video_data(request):
	if request.method == "POST":
		video_id = request.POST['vid']
		data = request.POST['data']
		print video_id
		print data
		video,created = Video.objects.get_or_create(video_id=video_id)
		video.data = data
		video.save()
		return HttpResponse("success",content_type="application/json")
@csrf_exempt
def get_video_data(request):
	if request.method == "POST":
		video_id = request.POST['vid']
		video = Video.objects.get(video_id=video_id)
		if video is not None:
			return HttpResponse(video.data,content_type="application/json")
		else:
			return HttpResponse("Error! video not found",content_type="application/json")
