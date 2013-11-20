       ____    .--.   .--.     .-'''-.    ____   ,---------.    ____     
     .'  __ `. |  | _/  /     / _     \ .'  __ `.\          \ .'  __ `.  
    /   '  \  \| (`' ) /     (`' )/`--'/   '  \  \`--.  ,---'/   '  \  \ 
    |___|  /  ||(_ ()_)     (_ o _).   |___|  /  |   |   \   |___|  /  | 
       _.-`   || (_,_)   __  (_,_). '.    _.-`   |   :_ _:      _.-`   | 
    .'   _    ||  |\ \  |  |.---.  \  :.'   _    |   (_I_)   .'   _    | 
    |  _( )_  ||  | \ `'   /\    `-'  ||  _( )_  |  (_(=)_)  |  _( )_  | 
    \ (_ o _) /|  |  \    /  \       / \ (_ o _) /   (_I_)   \ (_ o _) / 
     '.(_,_).' `--'   `'-'    `-...-'   '.(_,_).'    '---'    '.(_,_).'  
                                                                     
An ANTIVVACANA Project

http://github.com/msdahmif/aksata

## Requirements

1. PHP 5.1+ on Apache, nginx, or IIS (TODO: make a web.config)
2. MySQL

## Development instructions

1. Make wherever this repo is web-accessible
2. Modify database settings in aksata/config/main.php
3. Run aksata.sql wherever you set the database to
4. Make /aksata/protected/runtime writeable by the server
5. Mkdir /aksata/assets and make it writeable by the server

## Deployment instructions

1. Make /aksata web-accessible
2. Follow steps 2-5 above