import json
import time
import requests
user = 'user@user.com'
password = 'password'

def login(usuario,senha):
    payload = {"username":usuario,"password":senha}
    resultado = requests.post('https://plugfield.com.br/api/login',json=payload)
    resultado = resultado.json()
    acess_token = resultado['access_token']
    return acess_token

def devices(token_validado):
    site_device = 'https://plugfield.com.br/api/device/1942'
    token_device = {'access_token':token_validado}
    dados = requests.get(site_device,headers=token_device)
    valores = dados.json()
    return valores

if __name__ == '__main__':
    itens = dict (devices(login(user,password)))
    with open ('db.json','w') as arquivo:
        json.dump(itens['dashboard'],arquivo,indent=4)

    # message success
    print ('O Arquivo foi salvo com sucesso!')
    print (time.strftime('%d/%m/%Y %H:%M:%S'))
    time.sleep(60)