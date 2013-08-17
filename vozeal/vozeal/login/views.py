# Create your views here.
import base64
import hashlib
import random
import sys
import traceback
from django.shortcuts import render_to_response
from django.http import HttpResponseRedirect
from django.contrib import auth
from django.contrib.auth.models import User
from django.core.context_processors import csrf
from login.forms import LoginForm, RegForm
from django.core.mail import send_mail
from login.models import VozealUser

def auth_view(request):
	if request.method == 'POST' :
		form = LoginForm(request.POST)
		if form.is_valid() :
			username = form.cleaned_data['username']
			password = form.cleaned_data['password']
			print username
			print password
			user = auth.authenticate(username=username,password=password)
			if user is not None:
				auth.login(request,user)
 
				return HttpResponseRedirect('/vozeal/player/')
			else:
				return HttpResponseRedirect('/vozeal/invalid/')
		else:
			return HttpResponseRedirect('/vozeal/invalid/')

def register(request):
	if request.method == 'POST' :
		form = RegForm(request.POST)
		if form.is_valid() :
			print "here"
			username = form.cleaned_data['username']
			password = form.cleaned_data['password']
			email = form.cleaned_data['email']
			user = User.objects.create_user(username,email,password)
			user.save()
			user = auth.authenticate(username=request.POST['username'],password=request.POST['password'])
			
			auth_key =base64.b64encode(hashlib.sha256( str(random.getrandbits(256)) ).digest(), random.choice(['rA','aZ','gQ','hH','hG','aR','DD'])).rstrip('==')
			print auth_key 
			vozeal_user = VozealUser.objects.create(user=user,auth_key=auth_key)
			vozeal_user.save()
			if user is not None:
				try:
					send_mail(
						'Welcome to vozeal.com',
						'Welcome to vozeal.com! Your username is %s and your app key is:\n %s' % (user.username, auth_key),
						'manan@vozeal.com',
						[user.email])
				except Exception as e:
					_,_,tb = sys.exc_info()
    					traceback.print_tb(tb)	
					return HttpResponseRedirect('/vozeal/invalid')
				auth.login(request,user)
				return HttpResponseRedirect('/vozeal/player/')
			else:
				return HttpResponseRedirect('/vozeal/invalid/')
		else:
			return HttpResponseRedirect('/vozeal/invalid/')
def main(request):
	c = {}
	c.update(csrf(request))
	c['login_form'] = LoginForm()
	c['reg_form'] = RegForm()
	return render_to_response('index.html',c)

def invalid_login(request):
	return render_to_response('invalid')

def logout(request):
	return render_to_response('logout')

def player(request):
	return render_to_response('player.html')
