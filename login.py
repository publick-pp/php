import eel

eel.init('gui')

@eel.expose
def app():
    print('App is running')
    
app()
eel.start('login.html', size=(300, 200))