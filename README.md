# Cypher Character Creator

**Cypher Character Creator** is a web-based interface designed to manage character sheets for role-playing games. Built using Laravel, Vue, and Blade, it offers a secure environment where users can create, customize, and manage characters with various attributes, special abilities, and equipment.

## Features

### Character Creation and Management

- **Character Descriptor**: Choose descriptors like "Stealthy" or "Creative."
- **Character Type**: Select a character type, such as "Warrior."
- **Focus and Flavor**: Customize your character's focus and enhance abilities with unique flavors.
- **Advancements**: Track progression with options to increase capabilities, move toward perfection, or train skills.

### Special Abilities

- **Ability Management**: Add and manage special abilities categorized by required points (Might, Speed, Intellect).
- **Skills Management**: Modify skills in categories like "Stealth," "Interaction using lies/trickery," and "Abilities using illusion/trickery."

### Pools and Stats

- **Primary Attributes**: Allocate points to Might, Speed, and Intellect.
- **Effort and XP**: Track effort and experience points.
- **Damage Track**: Monitor the character’s condition (Impaired, Debilitated, Dead).

### Cyphers and Power Shifts

- **Manage Cyphers**: Handle power shifts such as accuracy, dexterity, flight, healing, etc.

### Equipment Management

- **Manage Equipment**: Categorize equipment into weapons, expensive items, moderate-priced items, and inexpensive items.

### Attack Management

- **Track Attacks**: Manage your character’s attacks, special abilities, and skills.

## Technologies Used

- **Laravel**: Backend framework for application logic and routing.
- **Vue.js**: Frontend framework for interactive components.
- **Blade**: Templating engine for rendering views.
- **Heroku**: Deployment platform for hosting the application.

## Deployment

The project is deployed on Heroku under the deployment name **"cypher-characters."**

## Getting Started

To get started with the project:

```bash
git clone https://github.com/yourusername/cypher-character-creator.git
cd cypher-character-creator
composer install
npm install
php artisan migrate
php artisan serve
```

## Security
Character actions are restricted to authenticated users. The application includes refactored user redirection and improved mobile responsiveness.

## Screenshots
Character Sheet Interface
<img width="1752" alt="Screenshot 2024-08-20 at 17 26 18" src="https://github.com/user-attachments/assets/359741df-7798-4d97-925b-e4debadda8b1">
This screenshot shows the character sheet interface, where users can input their character's name, descriptor, type, and other attributes.

Special Abilities and Equipment Management
<img width="1752" alt="Screenshot 2024-08-20 at 17 26 25" src="https://github.com/user-attachments/assets/637b155d-f7aa-4575-86d5-9bef0877287c">

This screenshot displays the section where users manage their character's special abilities, skills, and equipment.

Character List
<img width="1752" alt="Screenshot 2024-08-20 at 17 26 32" src="https://github.com/user-attachments/assets/92c0cc36-0fbd-4b8a-9415-7fdcf75a1666">

This screenshot shows the character list view, where users can view, edit, and manage all their characters.

Contributing
Contributions are welcome! Please fork the repository and submit a pull request with your changes.
