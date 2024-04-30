# Start the Docker Compose stack.
up:
	docker compose up -d

# Stop the Docker Compose stack.
down:
	docker compose down

# Run bash in the webapp service.
web:
	docker exec -ti sylius_plugin_web bash
