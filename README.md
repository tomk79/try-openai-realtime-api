# try-openai-realtime-api

## Setup

```bash
cd /path/to/your/workingdirectory
git clone https://github.com/tomk79/try-openai-realtime-api.git
cd ./try-openai-realtime-api
composer install

# OpenAI の APIキーを設定する
echo "OPENAI_API_KEY=\"sk-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\"" >> .env
```

## Start

```bash
composer start
```

and open `http://localhost:8080/`.
