import random

def recommend_destinations(preferences):
    destinations = {
        "Beach": ["Maldives", "Bali", "Hawaii"],
        "Mountain": ["Switzerland", "Nepal", "Canada"],
        "City": ["Paris", "New York", "Tokyo"]
    }
    return random.choice(destinations.get(preferences, ["No recommendations available"]))

# Example usage
print(recommend_destinations("Beach"))