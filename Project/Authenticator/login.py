from flask import Flask
from flask import request
from gcm import *
from flask import Flask, jsonify, request, url_for , render_template
import gevent
from gevent import monkey

#Local DB module to connect and retrieve data from DB
#import db as db
app = Flask(__name__)

getdevicedetails =     '''
                    SELECT deviceusername, deviceid
                    FROM registration
                    WHERE hostname ='$hostname'
                        AND username = '$username';
                    '''

registeruser =     '''
                    INSERT INTO registration (hostname, username, deviceid, deviceusername)
                    VALUES ('$hostname','$username', '$deviceid', '$deviceusername');
                    '''

authList= [{ 'deviceId': '10', 'userName': 'aditya', 'reg_id': '' },{ 'deviceId': '10', 'userName': 'mohit', 'reg_id': '' }]

@app.route('/api/authenticate/<deviceId>')
def authenticate(deviceId):
    # q1 = getdevicedetails.replace("$username",username)
    # q1 = q1.replace("$hostname",request.remote_addr)
    # data = db.getData(q1)

    reg_id=''

    # callAppNotify(deviceid,reg_id)
    # if len(data) == 0:
    #     return "Username not recognized"

    # row = data[0]
    # deviceid = row["deviceid"]
    # deviceusername = row["deviceusername"]

    # print deviceid + " " + deviceusername

    if deviceId=="marriot":
        return "1"
    else:
        return "0"
#      callAppNotify(deviceid,deviceusername)


def callAppNotify(deviceid,reg_id):
     gcm = GCM("GCM-ID")
    data = {'deviceid' : deviceid}
    response=gcm.plaintext_request(registration_id=reg_id, data=data)
    #do whatever you want with the response

# @app.route('/api/register/<username>/<deviceid>/<deviceusername>')
# def register(username,deviceid,deviceusername):
#     #Check if username for this host exists
#     q1 = getdevicedetails.replace("$username",username)
#     q1 = q1.replace("$hostname",request.remote_addr)
#     data = db.getData(q1)
#     if len(data) > 0:
#         return "Username already exists for this host"
#     q2 = registeruser.replace("$hostname",request.remote_addr)
#     q2 = q2.replace("$username",username)
#     q2 = q2.replace("$deviceid",deviceid)
#     q2 = q2.replace("$deviceusername",deviceusername)
#     data = db.getData(q2)
#     return "registered"

# @app.route('/login')
# def view_login():
#     return render_template("login.html")

# @app.route('/register')
# def view_register():
#     return render_template("register.html")

if __name__ == '__main__':
    # app.run()
    from gevent.wsgi import WSGIServer
    http_server = WSGIServer(('', 8080), app)
    http_server.serve_forever()