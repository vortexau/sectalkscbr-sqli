import base64
import urllib
import json

def tamper(payload, **kwargs):

    params = "{\"timeset\":\"1528721593\",\"iphash\":\"{payload}\"}".format(payload=payload)
    #data = urllib.quote_plus(params)
    data = base64.b64encode(data)

    return data
