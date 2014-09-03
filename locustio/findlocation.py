from locust import HttpLocust, TaskSet

class GetWoeidToLoc(TaskSet):
    #@task
    def WoeidToLoc(self):
        print "Locust instance (%r) executing WoeidToLoc" % (self.locust)
        #self.client.get("/FindLocation?woeid=12797535&locale=en-US&appid=search&count=1")
        print "Response status code:", response.status_code
        print "Response content:", response.content
"""
comments
"""

class FindlocationLocust(HttpLocust):
    #host = "http://gws2.maps.yahoo.com"
    host = "http://search.yahoo.com"
    min_wait=5000
    max_wait=9000
    task_set = GetWoeidToLoc
