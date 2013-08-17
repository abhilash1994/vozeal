from django.conf.urls import patterns, include, url

# Uncomment the next two lines to enable the admin:
from django.contrib import admin
admin.autodiscover()

urlpatterns = patterns('',
    # User auth urls
     url(r'^vozeal/$', 'login.views.main'),
     url(r'^vozeal/auth/$', 'login.views.auth_view'),
	 url(r'^vozeal/logout/$', 'login.views.logout'),
	 url(r'^vozeal/player/$', 'login.views.player'),
	 url(r'^vozeal/register/$', 'login.views.register'),
	 url(r'^getvideo/$', 'videoApi.views.get_video_data'),
	 url(r'^setvideo/$', 'videoApi.views.set_video_data'),
	 url(r'^video/(?P<vid>\w+)$', 'videoplayer.views.show_video'),




	 #url(r'^vozeal/invalid/$', 'login.views.invalid_login'),
    # url(r'^vozeal/', include('vozeal.foo.urls')),

    # Uncomment the admin/doc line below to enable admin documentation:
    # url(r'^admin/doc/', include('django.contrib.admindocs.urls')),

    # Uncomment the next line to enable the admin:
     url(r'^admin/', include(admin.site.urls)),
)
