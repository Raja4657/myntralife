var index = client.initIndex('players');
index.setSettings({
  searchableAttributes: ['name', 'team'],
  customRanking: ['desc(points)'],
});