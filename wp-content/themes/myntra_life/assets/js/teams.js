var index = client.initIndex('teams');
index.setSettings({
  searchableAttributes: ['name', 'location'],
  customRanking: ['asc(name)'],
});