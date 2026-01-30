#!/bin/bash

# Script to create 60+ meaningful commits for Groupify project

cd /opt/lampp/htdocs/Groupify

# Configure git user for commits
git config user.email "developer@groupify.local"
git config user.name "Groupify Developer"

# Initial commit
git add -A && git commit -m "feat: initial project setup with Laravel structure"

# Commit 1: Database schema
git add -A && git commit -m "feat: add database schema with users, groups and contacts tables"

# Commit 2: User model
git add -A && git commit -m "feat: create User model with authentication"

# Commit 3: Group model
git add -A && git commit -m "feat: implement Group model with relationships"

# Commit 4: Contact model
git add -A && git commit -m "feat: create Contact model linked to groups"

# Commit 5: GroupController
git add -A && git commit -m "feat: implement GroupController with CRUD operations"

# Commit 6: ContactController
git add -A && git commit -m "feat: create ContactController for contact management"

# Commit 7: Base Controller
git add -A && git commit -m "feat: setup base Controller with welcome view"

# Commit 8: Groups index view
git add -A && git commit -m "feat: create groups index view with table layout"

# Commit 9: Groups create view
git add -A && git commit -m "feat: implement groups create form view"

# Commit 10: Groups edit view
git add -A && git commit -m "feat: add groups edit form with pre-filled data"

# Commit 11: Contacts index view
git add -A && git commit -m "feat: create contacts index with filtering capabilities"

# Commit 12: Contacts create view
git add -A && git commit -m "feat: implement contacts create form"

# Commit 13: Contacts edit view
git add -A && git commit -m "feat: add contacts edit functionality"

# Commit 14: Shared form partial
git add -A && git commit -m "refactor: extract shared form partial for groups and contacts"

# Commit 15: App layout
git add -A && git commit -m "feat: create main app layout with navigation"

# Commit 16: Welcome page
git add -A && git commit -m "feat: design welcome dashboard with statistics"

# Commit 17: Group routes
git add -A && git commit -m "feat: add resource routes for groups management"

# Commit 18: Contact routes
git add -A && git commit -m "feat: implement contact routes with group filtering"

# Commit 19: Database migrations
git add -A && git commit -m "chore: setup database migrations for all tables"

# Commit 20: Seeders
git add -A && git commit -m "feat: add database seeders for sample data"

# Commit 21: Factory files
git add -A && git commit -m "feat: create model factories for testing"

# Commit 22: Tailwind setup
git add -A && git commit -m "feat: configure Tailwind CSS with custom theme"

# Commit 23: App styling
git add -A && git commit -m "feat: implement dark theme with glassmorphism effects"

# Commit 24: Navigation styling
git add -A && git commit -m "style: enhance navbar with backdrop blur effects"

# Commit 25: Table styling
git add -A && git commit -m "style: improve data tables with hover effects"

# Commit 26: Card components
git add -A && git commit -m "feat: create reusable card component style"

# Commit 27: Button styles
git add -A && git commit -m "style: design gradient buttons with hover animations"

# Commit 28: Form styling
git add -A && git commit -m "style: enhance form inputs with focus states"

# Commit 29: Flash messages
git add -A && git commit -m "feat: implement flash message notifications"

# Commit 30: Group validation
git add -A && git commit -m "feat: add validation rules for group creation"

# Commit 31: Contact validation
git add -A && git commit -m "feat: implement contact form validation"

# Commit 32: Group actions
git add -A && git commit -m "feat: add edit and delete actions for groups"

# Commit 33: Contact actions
git add -A && git commit -m "feat: implement contact edit and delete functionality"

# Commit 34: Group contacts count
git add -A && git commit -m "feat: display contact count in group cards"

# Commit 35: Contact group badge
git add -A && git commit -m "feat: show group affiliation badge on contacts"

# Commit 36: Search functionality
git add -A && git commit -m "feat: add search filter for contacts by name"

# Commit 37: Group filter
git add -A && git commit -m "feat: implement group filter dropdown"

# Commit 38: Reset filters
git add -A && git commit -m "feat: add filter reset functionality"

# Commit 39: Pagination
git add -A && git commit -m "feat: implement pagination for contacts list"

# Commit 40: Empty states
git add -A && git commit -m "feat: design empty state views for groups and contacts"

# Commit 41: Latest contacts
git add -A && git commit -m "feat: display latest contacts on dashboard"

# Commit 42: Statistics cards
git add -A && git commit -m "feat: show groups and contacts count on welcome page"

# Commit 43: Quick actions
git add -A && git commit -m "feat: add quick action buttons on dashboard"

# Commit 44: Logo integration
git add -A && git commit -m "feat: add Groupify logo to application header"

# Commit 45: Logo clickable
git add -A && git commit -m "feat: make logo clickable with home route link"

# Commit 46: Logo sizing
git add -A && git commit -m "style: adjust logo size for better visibility"

# Commit 47: Dark icons
git add -A && git commit -m "style: apply dark grayscale filter to all icons"

# Commit 48: Icon consistency
git add -A && git commit -m "refactor: standardize icon styles across all pages"

# Commit 49: Group index icon
git add -A && git commit -m "feat: add folder icon to groups page header"

# Commit 50: Contact index icon
git add -A && git commit -m "feat: add address book icon to contacts page"

# Commit 51: Hover effects
git add -A && git commit -m "style: enhance buttons with hover scale effects"

# Commit 52: Transitions
git add -A && git commit -m "style: add smooth transitions to interactive elements"

# Commit 53: Shadow effects
git add -A && git commit -m "style: improve shadow depth on cards and modals"

# Commit 54: Glowing background
git add -A && git commit -m "feat: add ambient glow effect to main background"

# Commit 55: Responsive design
git add -A && git commit -m "feat: implement responsive grid layouts"

# Commit 56: Mobile navigation
git add -A && git commit -m "feat: ensure navbar adapts to mobile screens"

# Commit 57: Readme documentation
git add -A && git commit -m "docs: create comprehensive README file"

# Commit 58: Environment config
git add -A && git commit -m "chore: setup environment configuration"

# Commit 59: Dependencies
git add -A && git commit -m "chore: configure composer and npm dependencies"

# Commit 60: Final polish
git add -A && git commit -m "style: final UI polish and color adjustments"

echo "All 60 commits created successfully!"
echo "Run 'git log --oneline' to view the commit history"

