-- Update the messages table to include 'guest' as a valid sender type
ALTER TABLE `messages` 
MODIFY COLUMN `sent_by` enum('client','agent','guest') NOT NULL;
