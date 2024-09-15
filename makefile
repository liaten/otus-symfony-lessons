up:
	docker compose up -d
down:
	docker compose down
sh:
	docker exec -it php sh
domidi:
	docker exec -it php php bin/console do:mi:di
domimi:
	docker exec -it php php bin/console do:mi:mi
